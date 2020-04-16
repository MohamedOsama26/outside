<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <link rel="icon" href="/outside/favicon.ico"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
            <meta name="viewport" content="width=device-width,initial-scale=1"/>
            <meta name="theme-color" content="#000000"/>
            <meta name="description" content="Web site created using create-react-app"/>
            <link rel="apple-touch-icon" href="/outside/logo192.png"/>
            <link rel="manifest" href="/outside/manifest.json"/>
            <title>Outside</title><link href="/outside/static/css/2.47e06e2e.chunk.css" rel="stylesheet">
            <link href="/outside/static/css/main.70f19d4c.chunk.css" rel="stylesheet">
        </head>
        <body>
        <?php
            $serverName = "localhost";
            $username = "root";
            $password = "";
            $databaseName = "outside";
            $conn = mysqli_connect($serverName,$username,$password,$databaseName);
        ?>
            <noscript>You need to enable JavaScript to run this app.</noscript>
            <div id="root"></div>
            <?php
                $rec_text=$_POST['text'];

                $query = "INSERT INTO outside_table (text) VALUES ('$rec_text')";
            ?>
            <script src="https://kit.fontawesome.com/8f50225d26.js" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/react/umd/react.production.min.js" crossorigin></script>
            <script src="https://unpkg.com/react-dom/umd/react-dom.production.min.js" crossorigin></script>
            <script src="https://unpkg.com/react-bootstrap@next/dist/react-bootstrap.min.js" crossorigin></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script>!function(e){function t(t){for(var n,i,l=t[0],f=t[1],a=t[2],c=0,s=[];c<l.length;c++)i=l[c],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&s.push(o[i][0]),o[i]=0;for(n in f)Object.prototype.hasOwnProperty.call(f,n)&&(e[n]=f[n]);for(p&&p(t);s.length;)s.shift()();return u.push.apply(u,a||[]),r()}function r(){for(var e,t=0;t<u.length;t++){for(var r=u[t],n=!0,l=1;l<r.length;l++){var f=r[l];0!==o[f]&&(n=!1)}n&&(u.splice(t--,1),e=i(i.s=r[0]))}return e}var n={},o={1:0},u=[];function i(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=e,i.c=n,i.d=function(e,t,r){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(r,n,function(t){return e[t]}.bind(null,n));return r},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/outside/";var l=this.webpackJsonpoutside=this.webpackJsonpoutside||[],f=l.push.bind(l);l.push=t,l=l.slice();for(var a=0;a<l.length;a++)t(l[a]);var p=f;r()}([])</script>
            <script src="/outside/static/js/2.39eeee20.chunk.js"></script><script src="/outside/static/js/main.20814d43.chunk.js"></script>
        </body>
    </html>