<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Htmldom;

class WebController extends Controller
{
    private $site_html = "";
    public function getStart()
    {
        $site_url = "http://www.express.pk/";
        $this->site_html = $this->getHtmlByUrl($site_url);
        $data = $this->getAllStories();

        dd($data);
        exit;
    }

    private function getHtmlByUrl($url = "")
    {
        if(!empty($url)) {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => $url,
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);

            $response = $client->request('GET', '');

            $body = $response->getBody();

            $stringBody = (string) $body;

            $html = new Htmldom($stringBody);

            return $html;

        }

        return false;
    }

    private function getAllStories()
    {
        $section_data = [];
        foreach($this->site_html->find('div.story') as $element) {
            $childers = $element->children;
            $link = $childers[0]->children[0]->attr['href'];
            $headline = $childers[0]->children[0]->plaintext;
            $main_story_details = $this->getStoryDetails($headline, $link);
            $story_id = $main_story_details['id'];
            $section_main_story = $this->site_html->find("#id-".$story_id);
            $story_section = $section_main_story[0]->parent()->parent();
            $story_section_name = explode(" ",$story_section->attr['class'])[0];
            $other_stories_details = $this->site_html->find(".".$story_section_name." .last > .cstoreyitem > div > a");
            $other_stories = [];
            foreach($other_stories_details as $story) {
                $thumb_image = $story->find("img[src!='']");
                if(!empty($story->innertext) && !empty($thumb_image)) {
                    $other_stories[] = $this->getStoryDetails($thumb_image[0]->alt, $story->attr['href']);
                }
            }
            $main_story_details['other_stories'] = $other_stories;
            $section_data[$story_section_name] = $main_story_details;
        }
        return $section_data;
    }

    private function getStoryDetails($headline, $link)
    {
        $story_link = explode("/", $link);
        $story = array_where($story_link, function ($key, $value) {
            if(is_numeric($value)) {
                return $value;
            }
        });
        $story_id = last($story);
        $story_html = $this->getHtmlByUrl($link);
        $paragraphs = $story_html->find("#id-".$story_id." .story-content p");
        $story_image = $story_html->find("#id-".$story_id." .story-content .mobile-story-img")[0]->attr['src'];
        $story_thumb_image = str_replace("640x480","160x120",$story_image);

        $paragraphs_text = [];
        foreach($paragraphs as $paragraph) {
            $paragraphs_text[] = $paragraph->plaintext;
        }
        $details = implode(" ",$paragraphs_text);

        return [ 'id'       => $story_id,
            'link'     => $link,
            'headline' => $headline,
            'details'  => $details,
            'thumb_image'    => $story_thumb_image,
            'full_image'    => $story_image
        ];

    }
}
