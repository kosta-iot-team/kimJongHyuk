<style>
    html {
      color: black;
      background-color: #fcfcfc;
    }
    body {
      display: flex;
    }
/*need height*/
.center {
  display: flex;
  align-items: center;
  
  margin: auto;
}
.flex {
  display: flex;
}
.box {
  margin: auto;
  margin-top: -5px;
  
  height: 550px;
  width: 400px;
  
  border: 1px solid transparent;
  background: white;
  
  border-radius: 5px;
  box-shadow: 1px 1px 3px #888888;
}

.span {
  font-size: 14px;
  
  cursor: pointer;
}
  .span:hover {
    color: rgb(53, 53, 247);
    font-size: 14px;
    font-weight: bold;
  }
.span-red {
  font-size: 14px;
  
  cursor: pointer;
}
  .span-red:hover {
    color: red;
    font-size: 14px;
    font-weight: bold;
  }
.a {
  cursor: pointer;
  color: blue;
  margin-left: 5px;
}
a {
  text-decoration: none;
  color: blue;
  cursor: pointer;
}
/*need width*/
  .middle {
    margin: auto;
  }

  .text-center {
    width: 100%;
    text-align: center;
  }
  .text-right {
    text-align: right;
    
    margin-left: auto;
  }

.textbox {
  color: #707070;
  border-radius: 7px;
  border: 2px solid #cccaca;
  margin: 0px 0px 15px 0px;
  height: 50px;
  width: 250px;
  padding-left: 15px;
  font-size: 15px;
}
  .textbox:focus {
    border: 2px #2405f2 solid;
    outline: none !important;
  }
  input::placeholder {
    color: #2d2e333d;
  }
  .textbox:hover {
    box-shadow: 0 0 0 2px blue, 0 0 8px blue;
    border-color: transparent;
  }
/*-----------임표정---------------*/
.switch {
  display: inline-block;
  width: 60px; /*=w*/
  height: 30px; /*=h*/
  margin: 8px;
  transform: translateY(50%);
  position: relative;
}
  .switch input {
    display: none;
  }
.slider {
  position: absolute;
  top: -19;
  bottom: 19;
  left: 0;
  right: 0;
  border-radius: 30px;
  box-shadow: 0 0 0 2px #777, 0 0 4px #777;
  cursor: pointer;
  border: 4px solid transparent;
  overflow: hidden;
  transition: 0.4s;
  padding-top: 0px;
}
  .slider:hover {
    box-shadow: 0 0 0 2px greenyellow, 0 0 8px greenyellow;
  }
  .slider:hover::before {
    background: greenyellow;
  }
  .slider:before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    background-color: #777;
    border-radius: 30px;
    transform: translateX(-30px); /*translateX(-(w-h))*/
    transition: 0.4s;
  }
  input:checked + .slider:before {
    transform: translateX(30px); /*translateX(w-h)*/
    background-color: rgb(160, 250, 24);
  }
  input:checked + .slider {
    box-shadow: 0 0 0 2px rgb(160, 250, 24), 0 0 8px rgb(160, 250, 24);
  }
  .slider:before {
    width: 200%;
    transform: translateX(-82px); /*translateX(-(w-h))*/
  }

.styled {
  height: 50px;
  width: 250px;
  
  border: 0;
  line-height: 2.5;
  padding: 0 20px;
  font-size: 1rem;
  text-align: center;
  color: #fff;
  border-radius: 10px;
  background-color: rgb(40, 40, 221);
  background-image: linear-gradient(
    to top left,
    rgba(0, 0, 0, 0.2),
    rgba(0, 0, 0, 0.2) 30%,
    rgba(0, 0, 0, 0)
  );
  cursor: pointer;
}
  .styled:hover {
    background-color: rgb(21, 21, 223);
    border: 1px solid rgb(21, 21, 223);
    box-shadow: 0 0 0 2px rgb(21, 21, 223), 0 0 8px rgb(21, 21, 223);
    outline: 0;
    color: rgb(21, 21, 223);
    background: #fcfcfc;
    font-weight: bold;
  }
  .styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.6),
    inset 2px 2px 3px rgba(0, 0, 0, 0.6);
    outline: 0;
  }
  .styled:focus {
    outline: 0;
  }
.styled-yellow {
  height: 50px;
  width: 250px;
  
  border: 0;
  line-height: 2.5;
  padding: 0 20px;
  font-size: 1rem;
  text-align: center;
  color: #fff;
  border-radius: 10px;
  background-color: yellowgreen;
  background-image: linear-gradient(
    to top left,
    rgba(0, 0, 0, 0.2),
    rgba(0, 0, 0, 0.2) 30%,
    rgba(0, 0, 0, 0)
  );
  cursor: pointer;
}
  .styled-yellow:hover {
    background-color: yellowgreen;
    border: 1px solid yellowgreen;
    box-shadow: 0 0 0 2px yellowgreen, 0 0 8px yellowgreen;
    outline: 0;
    color: yellowgreen;
    background: #fcfcfc;
    font-weight: bold;
  }
  .styled-yellow:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.6),
    inset 2px 2px 3px rgba(0, 0, 0, 0.6);
    outline: 0;
  }
  .styled-yellow:focus {
    outline: 0;
  }

.plus-button {
  align-content: center;
  border: 0px solid lightgrey;
  background-color: lightgrey;
  font-size: 16px;
  height: 2.5em;
  width: 2.5em;
  border-radius: 999px;
  position: relative;
  cursor: pointer;
}
  .plus-button:before {
    align-content: center;
    border: 0px solid lightgrey;
    background-color: blue;
    font-size: 16px;
    height: 2.5em;
    width: 2.5em;
    border-radius: 999px;
    position: relative;
    transition: 0.4s;
  }
  .plus-button:hover {
    border: 1px solid greenyellow;
    box-shadow: 0 0 0 2px greenyellow, 0 0 8px greenyellow;
    outline: 0;
    color: greenyellow;
    background: white;
  }
  .plus-button:before {
    align-content: center;
    height: 1em;
    width: 0.2em;
  }
  .plus-button:after {
    align-content: center;
    height: 0.2em;
    width: 1em;
  }
  .plus-button--large {
    align-content: center;
    font-size: 50px;
    color: white;
  }
  .plus-button:focus {
    outline: 0; /*??*/
  }

.minus-button {
  border: 2px solid lightgrey;
  background-color: #fff;
  
  position: relative;
  
  cursor: pointer;
  
  border-radius: 8px;
  height: 2em;
  width: 2em;
}
  .minus-button--large {
    font-size: 15px;
    color: lightgrey;
    align-content: center;
  }
  .minus-button:hover {
    border: 2px solid transparent;
    color: red;
    box-shadow: 0 0 0 2px red, 0 0 8px red;
    outline: 0;
  }
  .minus-button:focus {
    outline: 0;
  }
  
  .close-button {
    float: right;
    width: 2rem;
    line-height: 2rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
  }
.modal {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  visibility: hidden;
  transform: scale(1.1);
  transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
  .show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
  }
  .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 200px;
    height: 120px;
    border-radius: 0.5rem;
    align-content: center;
  }
</style>