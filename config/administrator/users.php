<?php
/**
 * Created by PhpStorm.
 * User: Welcome
 * Date: 11/28/2015
 * Time: 12:17 PM
 */

 return array(

     /**
      * Model title
      *
      * @type string
      */
     'title' => 'User Management',
     /**
      * The singular name of your model
      *
      * @type string
      */
     'single' => 'user',
     /**
      * The class name of the Eloquent model that this config represents
      *
      * @type string
      */
     'model' => 'Blog\User',
     /**
      * The columns array
      *
      * @type array
      */
     'columns' => array(
        'name' => array(
             'title' => 'Name',
         ),
         'email' => array(
             'title' => 'Email',
         ),
         'created_at' => array(
             'title' => 'Created At',
         ),
         'updated_at' => array(
             'title' => 'Updated At',
         )
     ),
     /**
      * The edit fields array
      *
      * @type array
      */
     'edit_fields' => array(
         'name' => array(
             'title' => 'Name',
             'type' => 'text'
         ),
         'email' => array(
             'title' => 'Email',
             'type' => 'text'
         )
     ),

 );