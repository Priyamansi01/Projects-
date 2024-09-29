// Imports
import React from "react";
import CalculatorTitle from "./calculatorTitle.js";
import OutputScreen from "./outputScreen.js";
import Button from "./button.js";
import { evaluate } from 'mathjs'; 

class Calculator extends React.Component {
  constructor() {
    super();
    // set the default state
    this.state = {
      question: '',
      answer: ''
    };
    // Bind the handleClick method
    this.handleClick = this.handleClick.bind(this);
  }

  //method to handle all click events from the buttons
  handleClick(event) {
    // get the value from the target element
    const value = event.target.value;

    switch (value) {
      case "=": {
        
        if (this.state.question !== "") {
          let ans = "";
          try {
            ans = evaluate(this.state.question);
          } catch (err) {
            this.setState({ answer: "Math Error" });
            return;
          }
          if (ans === undefined) {
            this.setState({ answer: "Math Error" });
          } else {
            this.setState({ answer: ans, question: "" });
          }
        }
        break;
      }

      case "Clear": {
        this.setState({ question: "", answer: "" });
        break;
      }

      case "Delete": {
        const str = this.state.question;
        this.setState({ question: str.slice(0, -1) });
        break;
      }

      default: {
        this.setState({ question: this.state.question + value });
        break;
      }
    }
  }

  render() {
    return (
      <div className="frame">
        <CalculatorTitle value="Simple Calculator" />
        <div className="mainCalc">
          <OutputScreen question={this.state.question} answer={this.state.answer} />
          <div className="button-row">
            <Button handleClick={this.handleClick} label={"Clear"} />
            <Button handleClick={this.handleClick} label={"Delete"} />
            <Button handleClick={this.handleClick} label={"."} />
            <Button handleClick={this.handleClick} label={"/"} />
          </div>
          <div className="button-row">
            <Button handleClick={this.handleClick} label={"7"} />
            <Button handleClick={this.handleClick} label={"8"} />
            <Button handleClick={this.handleClick} label={"9"} />
            <Button handleClick={this.handleClick} label={"*"} />
          </div>
          <div className="button-row">
            <Button handleClick={this.handleClick} label={"4"} />
            <Button handleClick={this.handleClick} label={"5"} />
            <Button handleClick={this.handleClick} label={"6"} />
            <Button handleClick={this.handleClick} label={"-"} />
          </div>
          <div className="button-row">
            <Button handleClick={this.handleClick} label={"1"} />
            <Button handleClick={this.handleClick} label={"2"} />
            <Button handleClick={this.handleClick} label={"3"} />
            <Button handleClick={this.handleClick} label={"+"} />
          </div>
          <div className="button-row">
            <Button handleClick={this.handleClick} label={"0"} />
            <Button handleClick={this.handleClick} label={"="} />
          </div>
        </div>
      </div>
    );
  }
}

export default Calculator;
