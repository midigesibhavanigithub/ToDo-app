
/* creating variables for the elements*/

const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");

/*Defining the function addTask*/

function addTask(){  /*here we add the code that will be executed when we click on the button*/
    if(inputBox.value === ''){
        alert("you must write something!");
    }
    else{
        let li = document.createElement("li"); /*creating one html element with the tag name li*/
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li); /*li should be displayed under the listcontainer*/
        let span = document.createElement("span"); /*for adding cross icon*/
        span.innerHTML = "\u00d7"; /*Adding content*/
        li.appendChild(span); 
    }
    /*to clear the input field after adding the text*/

    inputBox.value ="";
    saveData(); /*calling saveData everytime we add any changes*/

}
/*if we click on the particular task it will be checked or unchecked and
 if we will click on the cross button it should delete the particular task*/

listContainer.addEventListener("click", function(e){
    if(e.target.tagName ==="LI"){ /*it checks where we have clicked*/
        e.target.classList.toggle("checked"); /*if checked classname is already there it will remove that*/
    }
    else if(e.target.tagName ==="SPAN"){ /*it deletes the parent element*/
        e.target.parentElement.remove(); /*it will remove the li element so the task will be deleted*/
        saveData();
          }
},false);

/*creating function*/

function saveData(){
    localStorage.setItem("data", listContainer.innerHTML); /*adding name data afterthat we have to add the value that we want to save in our browser*/

}
/*To display the data whenever we open the website*/
function showtask(){
    listContainer.innerHTML = localStorage.getItem("data") /*it will give all the content stored in the browser with the name of data*/
}
/*Adding function Showtask*/
showtask(); 