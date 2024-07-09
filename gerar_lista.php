<?php
	
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  html {
    border: 0;
    margin: 0;
    padding: 0;
    background-color: #333;

  }

  * {
    font-size: medium;
    color: yellow;
        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
  }

  input {
    background-color: #333;
    padding: 1%;
    border-radius: 5px;
    width: 98%;
  }

  textarea {
    background-color: #333;
    padding: 1%;
    border-radius: 5px;
    width: 98%;
    color: aliceblue;
  }

  .ct {
    background-color: #666;
    color: aliceblue;
    padding: 10px;
    border-radius: 5px;
    margin-left: 10%;
    width: 80%;
    margin-top: 25px;
  }

  .checks {
    margin-left: 0;
    width: 10%;
  }
</style>

<body>

  <div class="ct">
    <h1>Hash Bruteforce Breaker</h1>
    <button id="break" style="width: 100%;color:aliceblue;background-color: #333;">Gerar JSON</button>
    <center><h3 id="h3"></h3></center>
  </div>





</body>
<script>

  //0xB779A091

 
  var index = 0;
  var hashgerados = [];
  var hashgerados2 = [];
  var encontrada = '';
  var encontrou = false;

  document.getElementById('break').addEventListener('click', () => {
    
    document.getElementById('break').innerHTML='Aguarde...';

    setTimeout(() => {
        var decripttado = '';
    decripttado = joaat(gerar());



    //-------------------------------
    for (var i = 0; i < 1000; i++) {
        if (encontrou === false) 
        {
          var aa = gerar();
          decripttado= joaat(aa);
          if (hashgerados.includes(decripttado)) {
            
            
            //console.log(hashgerados.length);
          }
          else { 
            //hashgerados.push(decripttado);
            hashgerados2.push({
                'palavra':aa,'hash':decripttado
            });
            
          }
        }

      }
//console.log(hashgerados2)
      const js = JSON.stringify(hashgerados2); 
      const b = new Blob([js],{
        type:'application/json'
      });
      const url = URL.createObjectURL(b);
      const a = document.createElement('a');
      a.href = url;
      a.textContent='Baixar';
      a.download = 'lista.json';
      document.getElementById('h3').append(a);
      
      
    }, 2000);
    

  });


 

  function gerar(t = 37) {
    //const c = 'adder';
    const c = 'abcdefghijklmnopqrstuvwxyz1234567890_';
    
    let s = '';
    for (let i = 0; i < Math.floor(Math.random() * c.length); i++) {
      s += c.charAt(Math.floor(Math.random() * c.length));
    }
    encontrada = s;
    return s;
  }

  //http://quotes.toscrape.com/





  function joaat(s) {
    let h = 0;
    for (let i = 0; i < s.length; i++) {
      h += s.charCodeAt(i);
      h += (h << 10);
      h ^= (h >> 6);
    }
    h += (h << 3);
    h ^= (h >> 11);
    h += (h << 15);
    h = h >>> 0
    return '0X' + h.toString(16).toUpperCase();
  }

  function joaat2(s) {
    let h = 0;
    for (let i = 0; i < s.length; i++) {
      h += s.charCodeAt(i);
      h += (h << 10);
      h ^= (h >> 6);
    }
    h += (h << 3);
    h ^= (h >> 11);
    h += (h << 15);
    //h = h >>> 0
    return h;
  }
  function joaat3(s) {
    let h = 0;
    for (let i = 0; i < s.length; i++) {
      h += s.charCodeAt(i);
      h += (h << 10);
      h ^= (h >> 6);
    }
    h += (h << 3);
    h ^= (h >> 11);
    h += (h << 15);
    h = h >>> 0
    return h;
  }



</script>

</html>

