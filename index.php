<!DOCTYPE html>
<html lang="en"><head><link rel="stylesheet" href="main.css"><style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</style></head>
<body class="">


	<style>@import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,900";
@import "font-awesome.min.css";
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

body {
  /* line-height: 1 */
}

ol,
ul {
  list-style: none;
}

blockquote,
q {
  quotes: none
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: '';
  content: none
}

table {
  border-collapse: collapse;
  border-spacing: 0
}

body {
  /* -webkit-text-size-adjust: none */
}

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body,
input,
select,
textarea {
  color: #fff;
  font-family: source sans pro, sans-serif;
  font-size: 15pt;
  font-weight: 300!important;
  letter-spacing: -.025em;
  line-height: 1.75em;
}

body {
  background: #fff;
  overflow: hidden
}

body.loading * {
  -moz-animation: none!important;
  -webkit-animation: none!important;
  -ms-animation: none!important;
  animation: none!important
}

a {
  -moz-transition: border-color .2s ease-in-out;
  -webkit-transition: border-color .2s ease-in-out;
  -ms-transition: border-color .2s ease-in-out;
  transition: border-color .2s ease-in-out;
  border-bottom: dotted 1px;
  color: inherit;
  outline: 0;
  text-decoration: none
}

a:hover {
  border-color: transparent
}

.icon {
  text-decoration: none;
  position: relative
}

.icon:before {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: 400;
  text-transform: none!important
}

.icon>.label {
  display: none
}

@-moz-keyframes wrapper {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@-webkit-keyframes wrapper {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@-ms-keyframes wrapper {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@keyframes wrapper {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

#wrapper {
  -moz-animation: wrapper 3s forwards;
  -webkit-animation: wrapper 3s forwards;
  -ms-animation: wrapper 3s forwards;
  animation: wrapper 3s forwards;
  height: 100%;
  left: 0;
  opacity: 0;
  position: fixed;
  top: 0;
  width: 100%
}

#bg {
  -moz-animation: bg 60s linear infinite;
  -webkit-animation: bg 60s linear infinite;
  -ms-animation: bg 60s linear infinite;
  animation: bg 60s linear infinite;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  background: #000000 ;
  background-repeat: repeat-x;
  height: 100%;
  left: 0;
  opacity: 1;
  position: fixed;
  top: 0
}

@-moz-keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0)
  }
}

@-webkit-keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0)
  }
}

@-ms-keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0)
  }
}

@keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0)
  }
}

#bg {
  background-size: 2250px auto;
  width: 6750px
}

@-moz-keyframes overlay {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@-webkit-keyframes overlay {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@-ms-keyframes overlay {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@keyframes overlay {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

#overlay {
  -moz-animation: overlay 1.5s 1.5s forwards;
  -webkit-animation: overlay 1.5s 1.5s forwards;
  -ms-animation: overlay 1.5s 1.5s forwards;
  animation: overlay 1.5s 1.5s forwards;
  background-attachment: fixed, fixed;
  background-image: url(images/overlay-pattern.png), url(images/overlay.svg);
  background-position: top left, center center;
  background-repeat: repeat, no-repeat;
  background-size: auto, cover;
  height: 100%;
  left: 0;
  opacity: 0;
  position: fixed;
  top: 0;
  width: 100%
}

#main {
  height: 100%;
  left: 0;
  position: fixed;
  /* text-align: center; */
  top: 0;
  width: 100%;
}

#main:before {
  content: '';
  display: inline-block;
  height: 100%;
  margin-right: 0;
  vertical-align: middle;
  width: 1px
}

@-moz-keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

@-webkit-keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

@-ms-keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

@keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@-moz-keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

@-webkit-keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

@-ms-keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

@keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0
  }
  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1
  }
}

#header {
  -moz-animation: header 1s 2.25s forwards;
  -webkit-animation: header 1s 2.25s forwards;
  -ms-animation: header 1s 2.25s forwards;
  animation: header 1s 2.25s forwards;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  cursor: default;
  display: inline-block;
  opacity: 0;
  position: relative;
  text-align: center;
  top: -1em;
  vertical-align: middle;
  width: 90%;
}

#header h1 {
  font-size: 4.35em;
  font-weight: 900;
  letter-spacing: -.035em;
  line-height: 1em;
}

#header p {
  font-size: 1.25em;
  margin: .75em 0 .25em;
  opacity: .75;
}

#header nav {
  margin: 1.5em 0 0
}

#header nav li {
  -moz-animation: nav-icons .5s ease-in-out forwards;
  -webkit-animation: nav-icons .5s ease-in-out forwards;
  -ms-animation: nav-icons .5s ease-in-out forwards;
  animation: nav-icons .5s ease-in-out forwards;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  display: inline-block;
  height: 5.35em;
  line-height: 5.885em;
  opacity: 0;
  position: relative;
  top: 0;
  width: 5.35em
}

#header nav li:nth-child(1) {
  -moz-animation-delay: 2.5s;
  -webkit-animation-delay: 2.5s;
  -ms-animation-delay: 2.5s;
  animation-delay: 2.5s
}

#header nav li:nth-child(2) {
  -moz-animation-delay: 2.75s;
  -webkit-animation-delay: 2.75s;
  -ms-animation-delay: 2.75s;
  animation-delay: 2.75s
}

#header nav li:nth-child(3) {
  -moz-animation-delay: 3s;
  -webkit-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s
}

#header nav li:nth-child(4) {
  -moz-animation-delay: 3.25s;
  -webkit-animation-delay: 3.25s;
  -ms-animation-delay: 3.25s;
  animation-delay: 3.25s
}

#header nav li:nth-child(5) {
  -moz-animation-delay: 3.5s;
  -webkit-animation-delay: 3.5s;
  -ms-animation-delay: 3.5s;
  animation-delay: 3.5s
}

#header nav li:nth-child(6) {
  -moz-animation-delay: 3.75s;
  -webkit-animation-delay: 3.75s;
  -ms-animation-delay: 3.75s;
  animation-delay: 3.75s
}

#header nav li:nth-child(7) {
  -moz-animation-delay: 4s;
  -webkit-animation-delay: 4s;
  -ms-animation-delay: 4s;
  animation-delay: 4s
}

#header nav li:nth-child(8) {
  -moz-animation-delay: 4.25s;
  -webkit-animation-delay: 4.25s;
  -ms-animation-delay: 4.25s;
  animation-delay: 4.25s
}

#header nav li:nth-child(9) {
  -moz-animation-delay: 4.5s;
  -webkit-animation-delay: 4.5s;
  -ms-animation-delay: 4.5s;
  animation-delay: 4.5s
}

#header nav li:nth-child(10) {
  -moz-animation-delay: 4.75s;
  -webkit-animation-delay: 4.75s;
  -ms-animation-delay: 4.75s;
  animation-delay: 4.75s
}

#header nav a {
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none;
  border: 0;
  display: inline-block
}

#header nav a:before {
  -moz-transition: all .2s ease-in-out;
  -webkit-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  border-radius: 100%;
  border: solid 1px #fff;
  display: block;
  font-size: 1.75em;
  height: 2.5em;
  line-height: 2.5em;
  position: relative;
  text-align: center;
  top: 0;
  width: 2.5em;
}

#header nav a:hover {
  font-size: 1.1em
}

#header nav a:hover:before {
  background-color: rgba(255, 255, 255, .175);
  color: #fff
}

#header nav a:active {
  font-size: .95em;
  background: 0 0
}

#header nav a:active:before {
  background-color: rgba(255, 255, 255, .35);
  color: #fff
}

#header nav a span {
  display: none
}

#footer {
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5) 75%);
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5) 75%);
  background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5) 75%);
  background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5) 75%);
  bottom: 0;
  cursor: default;
  height: 6em;
  left: 0;
  line-height: 8em;
  position: absolute;
  text-align: center;
  width: 100%
}

@media screen and (max-width:1680px) {
  body,
  input,
  select,
  textarea {
    /* font-size: 13pt */
  }
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0)
    }
  }
  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0)
    }
  }
  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0)
    }
  }
  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0)
    }
  }
  #bg {
    background-size: 1500px auto;
    width: 4500px
  }
}

@media screen and (max-width:1280px) {
  body,
  input,
  select,
  textarea {
    /* font-size: 12pt */
  }
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0)
    }
  }
  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0)
    }
  }
  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0)
    }
  }
  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0)
    }
  }
  #bg {
    background-size: 750px auto;
    width: 2250px
  }
}

@media screen and (max-width:736px) {
  body {
    min-width: 320px
  }
  body,
  input,
  select,
  textarea {
    /* font-size: 11pt */
  }
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0)
    }
  }
  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0)
    }
  }
  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0)
    }
  }
  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0)
    }
  }
  #bg {
    background-size: 300px auto;
    width: 900px
  }
  #header h1 {
    font-size: 2.5em
  }
  #header p {
    font-size: 1em
  }
  #header nav {
    font-size: 1em
  }
  #header nav a:hover {
    font-size: 1em
  }
  #header nav a:active {
    font-size: 1em
  }
}

@media screen and (max-width:480px) {
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0)
    }
  }
  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0)
    }
  }
  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0)
    }
  }
  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }
    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0)
    }
  }
  #bg {
    background-size: 412.5px auto;
    width: 1237.5px
  }
  #header nav {
    padding: 0 1em
  }
}
@media screen and (max-width: 910px)
html.responsive div.responsive_header {
    display: block;
}
.responsive_header {
    display: none;
    background: #171a21;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 20;
    box-shadow: 0 0 7px 0 rgb(0 0 0 / 75%);
    overflow: hidden;
    padding: 13px 8px;
}
* {
    padding: 0;
    margin: 0;
}
Benutzer-Agent-Stylesheet
div {
    display: block;
}
body.v6 {
    position: relative;
    min-height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    color: #c6d4df;
    font-size: 12px;
}</style>



	<embed src="music.mp3" autostart="true" hidden="true" loop="true"><script async="" src="https://mc.yandex.ru/metrika/tag.js"></script><script>!function(i,h,n,m,l,k,j){i[l]=i[l]||function(){(i[l].a=i[l].a||[]).push(arguments)},i[l].l=1*new Date,k=h.createElement(n),j=h.getElementsByTagName(n)[0],k.async=1,k.src=m,j.parentNode.insertBefore(k,j)}(window,document,"script","https://mc.yandex.ru/metrika/tag.js","ym"),ym(55017643,"init",{clickmap:!0,trackLinks:!0,accurateTrackBounce:!0,webvisor:!0});</script><div id="wrapper"><div id="bg"></div><div id="overlay"></div><div id="main">



		<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
			<header id="header"><h1>OneWearf</h1><p>Junior &nbsp;•&nbsp; PHP &nbsp;•&nbsp; Developer</p><nav><ul><li><a href="https://vk.com/onewearf"><img src="icon fa-vk.png"><span class="label">VK</span></a></li><li><a href="https://github.com/GommeAWM"><span class="label">GITHUB</span></a></li><li><a href="https://www.youtube.com/channel/UC743JPG3aCnjl1dUEb-vvJQ"><img src="icon fa-comments.jpg"><span class="label">YOUTUBE</span></a></li></ul></nav></header><footer id="footer"><span class="copyright">© created by Reydovich</span></footer></div></div> <div class="responsive_header">
				<div class="">
					<div id="responsive_menu_logo">
						<img src="" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="">
															<img src="" height="36" border="0" alt="OneWearf">
													</a>
					</div>					
				</div>
			</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/buzz/1.2.1/buzz.min.js"></script><script>
	var sound = new buzz.sound("/music.mp3");
sound.loop().play().fadeIn();
 </script><script>window.onload=function(){document.body.className=""},window.ontouchmove=function(){return !1},window.onorientationchange=function(){document.body.scrollTop=0};</script></body></html>