/**
 * Created by Muhammad kashif on 8/20/2016.
 */

"use strict";

var Alert = ReactBootstrap.Alert;
var Modal = ReactBootstrap.Modal;
var Button = ReactBootstrap.Button;
var Popover = ReactBootstrap.Popover;
var Tooltip = ReactBootstrap.Tooltip;
var OverlayTrigger = ReactBootstrap.OverlayTrigger;

var Example = React.createClass({
  displayName: "Example",

  getInitialState: function getInitialState() {
    return { showModal: false };
  },

  close: function close() {
    this.setState({ showModal: false });
  },

  open: function open() {
    this.setState({ showModal: true });
  },

  render: function render() {
    var popover = React.createElement(
      Popover,
      { id: "modal-popover", title: "popover" },
      "very popover. such engagement"
    );
    var tooltip = React.createElement(
      Tooltip,
      { id: "modal-tooltip" },
      "wow."
    );

    return React.createElement(
      "div",
      null,
      React.createElement(
        "p",
        null,
        "Click to get the full Modal experience!"
      ),
      React.createElement(
        Button,
        {
          bsStyle: "primary",
          bsSize: "large",
          onClick: this.open
        },
        "Launch demo modal"
      ),
      React.createElement(
        Modal,
        { show: this.state.showModal, onHide: this.close },
        React.createElement(
          Modal.Header,
          { closeButton: true },
          React.createElement(
            Modal.Title,
            null,
            "Modal heading"
          )
        ),
        React.createElement(
          Modal.Body,
          null,
          React.createElement(
            "h4",
            null,
            "Text in a modal"
          ),
          React.createElement(
            "p",
            null,
            "Duis mollis, est non commodo luctus, nisi erat porttitor ligula."
          ),
          React.createElement(
            "h4",
            null,
            "Popover in a modal"
          ),
          React.createElement(
            "p",
            null,
            "there is a ",
            React.createElement(
              OverlayTrigger,
              { overlay: popover },
              React.createElement(
                "a",
                { href: "#" },
                "popover"
              )
            ),
            " here"
          ),
          React.createElement(
            "h4",
            null,
            "Tooltips in a modal"
          ),
          React.createElement(
            "p",
            null,
            "there is a ",
            React.createElement(
              OverlayTrigger,
              { overlay: tooltip },
              React.createElement(
                "a",
                { href: "#" },
                "tooltip"
              )
            ),
            " here"
          ),
          React.createElement("hr", null),
          React.createElement(
            "h4",
            null,
            "Overflowing text to show scroll behavior"
          ),
          React.createElement(
            "p",
            null,
            "Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros."
          ),
          React.createElement(
            "p",
            null,
            "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."
          ),
          React.createElement(
            "p",
            null,
            "Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla."
          ),
          React.createElement(
            "p",
            null,
            "Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros."
          ),
          React.createElement(
            "p",
            null,
            "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."
          ),
          React.createElement(
            "p",
            null,
            "Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla."
          ),
          React.createElement(
            "p",
            null,
            "Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros."
          ),
          React.createElement(
            "p",
            null,
            "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."
          ),
          React.createElement(
            "p",
            null,
            "Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla."
          )
        ),
        React.createElement(
          Modal.Footer,
          null,
          React.createElement(
            Button,
            { onClick: this.close },
            "Close"
          )
        )
      )
    );
  }
});

ReactDOM.render(React.createElement(Example, null), document.getElementById('example'));
//# sourceMappingURL=react-components.js.map
