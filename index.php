<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detect Safari Browser</title>

  </head>
  <body>

      <script>
        var isSafari = navigator.vendor && navigator.vendor.indexOf('Apple') > -1 &&
                     navigator.userAgent &&
                     navigator.userAgent.indexOf('CriOS') == -1 &&
                     navigator.userAgent.indexOf('FxiOS') == -1;

      var el = document.createElement("p");
      el.innerText = "Is it Safari: " + isSafari;

      document.body.appendChild(el);

      el = document.createElement("p");
      el.innerText = "navigator.vendor: " + navigator.vendor;

      document.body.appendChild(el);

      el = document.createElement("p");
      el.innerText = "navigator.userAgent: " + navigator.userAgent;

      document.body.appendChild(el);


      if(isSafari == true){
        el = document.createElement("h1");
        el.innerText = "Please use other browser than Safari browser.";

        document.body.appendChild(el);
      }



    </script>

  </body>
</html>
