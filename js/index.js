'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var App = function (_React$Component) {
  _inherits(App, _React$Component);

  function App() {
    _classCallCheck(this, App);

    return _possibleConstructorReturn(this, _React$Component.apply(this, arguments));
  }

  App.prototype.componentDidMount = function componentDidMount() {
    var left = document.getElementById('left');
    var right = document.getElementById('right');
    dragula([left, right]);
  };

  App.prototype.render = function render() {
    return React.createElement(
      'div',
      { className: 'container' },
      React.createElement(
        'div',
        { id: 'left', className: 'container' },
        React.createElement(Card, { body: 'Card 3' }),
        React.createElement(Card, { body: 'Card 4' })
      ),
      React.createElement(
        'div',
        { id: 'right', className: 'container' },
        React.createElement(Card, { body: 'Card 1' }),
        React.createElement(Card, { body: 'Card 2' })
      )
    );
  };

  return App;
}(React.Component);

var Card = function (_React$Component2) {
  _inherits(Card, _React$Component2);

  function Card(props) {
    _classCallCheck(this, Card);

    return _possibleConstructorReturn(this, _React$Component2.call(this, props));
  }

  Card.prototype.render = function render() {
    return React.createElement(
      'div',
      { className: 'card' },
      React.createElement(
        'div',
        { className: 'card-header' },
        React.createElement(
          'h3',
          null,
          'Example Card'
        )
      ),
      React.createElement(
        'div',
        { className: 'card-body' },
        React.createElement(
          'p',
          null,
          this.props.body
        )
      )
    );
  };

  return Card;
}(React.Component);

React.render(React.createElement(App, null), document.getElementById('container'));