var items = ["items1", "items2", "items3", "items4"];

var list = document.querySelector("#mylist");
var close = document.getElementsByClassName('close');
var html = "";

items.forEach(function (item) {
  var li = document.createElement("li");
  var t = document.createTextNode(item);

  li.className = "list-group-item";
  li.appendChild(t);

  list.appendChild(li);

  var span = document.createElement("span");
  var text = document.createTextNode("X");
  span.className = "close";
  span.appendChild(text);
    li.appendChild(span);
    


  
});

for (var i = 0; i < close.length; i++) {
    close[i].onclick = function () {
        var li = this.parentElement;
        li.style.display = "none";
    }
  }
list.addEventListener("click", function (item) {
  if ((item.target.tagName = "li")) {
    item.target.classList.toggle("checked");
  }
});
