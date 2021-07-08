window.onload = function  () {
  
  var createTextbox = function () {
    var x = 1,
        container = document.getElementById('my_divcar');
      
    return function () {
      var div = document.createElement('div');
          input = document.createElement('input');
          input2 = document.createElement('input');
          input3 = document.createElement('input');
      input.type= "text";
      input.name = "xcar" + x;
      input2.type= "text";
      input2.name = "xano" + x;
      input3.type= "text";
      input3.name = "xanof" + x;
      input.placeholder = "Modelo " +x;
      input2.placeholder = "Ano Inicial";
      input3.placeholder = "Ano Final";
      input.className = "carstyle";
      input2.className = "carstyle";
      input3.className = "carstyle";
      div.appendChild(input);
      div.appendChild(input2);
      div.appendChild(input3);
      container.appendChild(div);
      x++;
    }
  }();

  //VARIATION

  var createTextbox2 = function () {
    var i = 1,
        container = document.getElementById('my_divvariation');
      
    return function () {
      var div = document.createElement('div'),
          input = document.createElement('input');
      input.type= "text";
      input.name = "xvariation" + i;
      input.className = "variationstyle";
      input.placeholder = "Variação " +i;
      input.addEventListener('keyup', function(){
        document.getElementById("charNum").value = input.placeholder + ", Character Count: " + input.value.length;
      });
      input.addEventListener('click', function(){
        document.getElementById("charNum").value = input.placeholder + ", Character Count: " + input.value.length;
    });
      input.value.length
      div.appendChild(input);
      container.appendChild(div);
      i++;
    }
  }();

    //TITLE

  var createTextbox3 = function () {
    var z = 1,
        container = document.getElementById('my_divtitle');
      
    return function () {
      var div = document.createElement('div'),
          input = document.createElement('input');
      input.type= "text";
      input.name = "xtitle" + z;
      input.id = "xtitle" + z;
      input.className = "titlestyle";
      input.placeholder = "Titulo " +z;
      input.addEventListener('keyup', function(){
        document.getElementById("charNum").value = input.placeholder + ", Character Count: " + input.value.length;
      });
      input.addEventListener('click', function(){
        document.getElementById("charNum").value = input.placeholder + ", Character Count: " + input.value.length;
    });
      div.appendChild(input);
      container.appendChild(div);
      z++;
    }
  }();
  
  // event binding
  document.getElementById('carButton').onclick = createTextbox;
  document.getElementById('varButton').onclick = createTextbox2;
  document.getElementById('titleButton').onclick = createTextbox3;
}
