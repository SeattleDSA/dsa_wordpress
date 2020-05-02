var qasCopy = [];

/*
* Listen for "Show another Q&A" button tap. When tapped, "printQA" is called.
*/
document.getElementById("loadQA").addEventListener("click", function() {
  printQA();
});

window.onload = printQA();

/*
* Checks if  qasCopy is empty and adds qas array into the qasCopy array.
* Takes a random object from the qasCopy array and returns the variables.
* Does not return a duplicate qa until all qas are exhauster.
*/
function getRandomQA() {
  if (qasCopy.length === 0) {
    qasCopy = [].concat(qas);
  }
  var qa = qasCopy.splice(
    Math.floor(Math.random() * qasCopy.length),
    1
  )[0];
  console.log(qasCopy);
  return qa;
}

/*
* printQA function calls randomQA function and prints the qa to the page template.
*/

function printQA() {
  var currentQA = getRandomQA();
  var message = '<h3 class="question">Q: ' + currentQA.question + "</h3>";
  message += '<p class="answer">A: ' + currentQA.answer + "</p><footer>";
  if (currentQA.readmore) {
    message += '<p><a class="readmore" href="' + currentQA.readmore + '">Read More...</a></p>';
  }
  if (currentQA.tags) {
  	message += '<span class="tags small">tags: ' + currentQA.tags + '</span>';
  }
  message += "</footer>";

  document.getElementById("qa-box").innerHTML = message;
}

printQA();