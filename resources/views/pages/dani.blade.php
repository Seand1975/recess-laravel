<script type="text/javascript">
    let hov = false;
    function show() {
        if (!hov) {
            let input = document.getElementById('text');
            let btn = document.getElementById('clk');
            input.className += " inp";
            btn.className += " move";
            hov = true;
        }
    }
</script>

<style>
@keyframes inp {
  0% {
    width: 0%;
    visibility: hidden;
  }
  100% {
    width: 80%;
    visibility: visible;
  }
}
@keyframes posn {
  0%{
    left:40%;
    background-color: white;
    color:black;
    transform: rotate(45deg);
  }
  33%{
    transform: rotate(70deg);
  }
  67%{
    transform: rotate(20deg);
  }
  100%{
    left:4%;
    background-color: #343a40;
    color:white;
  }
}
.search{
  margin: 10px;
  width: 2%;
  height: 50px;
  font-size: 30px;
  text-indent: 20px;
  border-radius: 4px;
  border-width: 0px;
  box-shadow: 0px 0px 6px #506070;
  visibility: hidden;
}
.inp{
  animation: inp 1s;
  animation-delay: 0.25s;
  animation-fill-mode: forwards;
}
button#clk{
  transform: rotate(45deg);
  width: 60px;
  height: 60px;
  position: relative;
  top: 3%;
  left: 40%;
  margin-left: 10px;
  background-attachment: fixed;
  font-weight: bolder;
  box-shadow: 0px 0px 8px #14213d;
}
.move{
 animation: posn 1s;
 animation-delay: 0.25s;
 animation-fill-mode: forwards;
}
div.holder{
  align-items: center;
  display: flex;
  width: 95%;
  margin-top: 6vh;
  margin-left: 3vw;
}
div#rev{
  transform: rotate(-45deg);
}
.product-device {
  position: absolute;
  right: 35.5%;
  bottom: -30%;
  width: 320px;
  height: 560px;
  background-color: #a7bacf;
  border-radius: 21px;
  box-shadow: 9px 7px #101e30;
  z-index: -1;
}
.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "©";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}
.product-device-2 {
  top: -30%;
  right: auto;
  bottom: 0;
  left: 5%;
  transform: rotate(30deg);
  background-color: #14213d;
}
.my-5{z-index: 1;}
</style>