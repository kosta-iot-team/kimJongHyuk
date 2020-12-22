<style>
.loader {
  border: 10px solid #6eacd6;
  border-radius: 50%;
  border-top: 10px solid #3498db;
  border-right: 10px solid #3498db;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 1.6s linear infinite;
  animation: spin 1.5s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-360deg);
  }
}
html {
  background: #fcfcfc;
}
</style>
