 <!-- Improved compatibility of back to top link: See: https://github.com/midigesibhavanigithub/ToDo-app/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the ToDo-app. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/midigesibhavanigithub/ToDo-app">
    <img src="https://github.com/midigesibhavanigithub/ToDo-app/blob/main/images/download.jpg" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">ToDo-app</h3>

  <p align="center">
    An awesome README ToDo-app to jumpstart your projects!
    <br />
    <a href="https://github.com/midigesibhavanigithub/ToDo-app"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/midigesibhavanigithub/ToDo-app">View Demo</a>
    ·
    <a href="https://github.com/midigesibhavanigithub/ToDo-app/issues">Report Bug</a>
    ·
    <a href="https://github.com/midigesibhavanigithub/Todo-app/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#Project Title">project title</a></li>
        <li><a href="#Description">Description</a></li>
       <li><a href="#Project Resources">project Resources</a></li>
   <ul>
    <li><a href="#Built-with">Built-with</a> </li>
   </ul>
  </li>
    <li><a href="#Code">Code</a></li>
    <li><a href="#Github Functionalities">Github Funtionalities</a></li>
    <li><a href="#Project Benefits">Project Benefits</a></li>
    <li><a href="#License">License</a></li>
    <li><a href="#Contact">Contact</a></li>
    <li><a href="#Acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## project Title

Creating a simple Todo-app web application
<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Description

To-Do lists are the lists that we generally use to maintain our day to day tasks or list of everything that we have to do, with the most important tasks at the top of the list, and the least important tasks at the bottom. It is helpful in planning our daily schedules .We can add more tasks at any time and  delete  a task that is completed. The four major tasks that we can perform in a To-Do list are:
                   1. Add Tasks
                   2. Update Tasks
                   3. Read Tasks
                  4. Delete Tasks

### Built With

This section should list any major frameworks/libraries used to bootstrap your project. Here are a few examples.

* [![React][React.js]][React-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

##Code
##Using html
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            To-Do List App - Easy Tutorials
        </title>
        <link rel="stylesheet" href="style.css">
   </head>
   <body>
    <div class="container">
        <div class="todo-app">
            <h2>To-Do List  <img src="images/icon.png"></h2>
            <div class="row">
                <input type="text" id="input-box" placeholder="Add your text">
                <button onclick="addTask()">Add</button>

            </div>
            <ul id="list-container">
               <!-- <li class="checked">Task 1</li>
                <li>Task 2</li>
                <li>Task 3</li>-->

            </ul>
        </div>

    </div>
    <script src="script.js"></script>

   </body>
    
    
</html>
##Using css
*{
    margin: 0;
    padding: 0;
    font-family: 'poppins', sans-serif;
    box-sizing: border-box;
}
.container{
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(135deg, #153677, #4e085f);
    padding: 10px;

}
.todo-app{
    width: 100%;
    max-width: 540px;
    background: #fff;
    margin: 100px auto 20px;
    padding: 40px 30px 70px;
    border-radius: 10px;
}
.todo-app h2{
    color:#002765 ;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.todo-app h2 img{
    width: 30px;
    margin-left: 10px;
}
.row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #edeef0;
    border-radius: 30px;
    padding-left: 20px;
    margin-bottom: 25px;
}
input{
    flex: 1;
    border:none;
    outline: none;
    background: transparent;
    padding: 10px;
}
button{
    border: none;
    outline: none;
    padding: 16px 50px;
    background: #ff5945;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 40px;
}
ul li{
    list-style: none;
    font-size: 17px;
    padding: 12px 8px 12px 50px;
    user-select: none;
    cursor: pointer;
    position: relative;
}
ul li::before{
    content:'';
    position: absolute;
    height: 28px;
    width: 28px;
    border-radius: 50%;
    background-image: url(images/unchecked.png);
    background-size: cover;
    background-position: center;
    top: 12px;
    left: 8px;
}
ul li.checked{
    color: #555;
    text-decoration: line-through;
}
ul li.checked::before{
    background-image: url(images/checked.png);
}
ul li span{
    position: absolute;
    right: 0;
    top: 5px;
    width: 40px;
    height: 40px;
    font-size: 22px;
    color: #555;
    text-align: center;
    border-radius: 50%;

}
ul li span:hover{
    background: #edeef0;
}
##Using Javascript
const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");

function addTask(){
    if(inputBox.value === ''){
        alert("you must write something!");
    }
    else{
        let li = document.createElement("li");
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span);
    }
    inputBox.value ="";
    saveData();

}
listContainer.addEventListener("click", function(e){
    if(e.target.tagName ==="LI"){
        e.target.classList.toggle("checked");
    }
    else if(e.target.tagName ==="SPAN"){
        e.target.parentElement.remove();
    }
},false);

function saveData(){
    localStorage.setItem("data", listContainer.innerHTML);

}
function showtask(){
    listContainer.innerHTML = localStorage.getItem("data")
}
showtask();

##Github Funtionalities
To associate your repository with the todolist topic, visit your repo’s landing page and select “manage topics”.

##Project Benefits
Collaborative coding is one of the key benefits of GitHub, and it has transformed the way Developers work together on code. With GitHub, multiple developers can work on the same codebase simultaneously, making it easier to manage large projects with many contributors.

<!-- LICENSE -->
## License

Distributed under the MIT license. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

Project Link: [https://github.com/your_username/repo_name](https://github.com/your_username/repo_name)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/midigesibhavanigithub/ToDo-app.svg?style=for-the-badge
[contributors-url]: https://github.com/midigesibhavanigithub/ToDo-app/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/midigesibhavanigithub/ToDo-app.svg?style=for-the-badge
[forks-url]: https://github.com/midigesibhavanigithub/ToDo-app/network/members
[stars-shield]: https://img.shields.io/github/stars/midigesibhavanigithub/ToDo-app.svg?style=for-the-badge
[stars-url]: https://github.com/midigesibhavanigithub/ToDo-app/stargazers
[issues-shield]: https://img.shields.io/github/issues/midigesibhavanigithub/ToDo-app.svg?style=for-the-badge
[issues-url]: https://github.com/midigesibhavanigithub/ToDo-app/issues
[license-shield]: https://img.shields.io/github/license/midigesibhavanigithub/ToDo-app.svg?style=for-the-badge
[license-url]:https://github.com/midigesibhavanigithub/ToDo-app/blob/main/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/midigesi-bhavani-986b91267/
[product-screenshot]: images/screenshot.png

[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/

[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com

                 
