
html {
    height: 100%;
   /* background: radial-gradient(ellipse at bottom, #351b2e 0%, #000000 100%);*/
   /* overflow: hidden;*/

   width:100%; /*Remove to get back to normal*/


  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }
  
  #stars {
    width: 1px;
    height: 1px;
    background: transparent;
    position: absolute;
    box-shadow:<script>
	var random=Math.floor(Math.random() * 2000);
	var i;
	var color = "#FFF";
	var text = "123px 123px #FFF, ";
		for (i = 0; i < 700; i++) {
		var random=Math.floor(Math.random() * 2000);
		var random2=Math.floor(Math.random() * 2000);
		text += random + "px " + random2 + "px " + color + ",";
		}
		document.write(text + "123px 123px #FFF;")
	</script>;
	animation: animStar 50s linear infinite;
  }
  #stars:after {
    content: " ";
    position: absolute;
    top: 2000px;
    width: 1px;
    height: 1px;
    background: transparent;
	box-shadow:<script>
	var random=Math.floor(Math.random() * 2000);
	var i;
	var color = "#FFF";
	var text = "123px 123px #FFF, ";
		for (i = 0; i < 700; i++) {
		var random=Math.floor(Math.random() * 2000);
		var random2=Math.floor(Math.random() * 2000);
		text += random + "px " + random2 + "px " + color + ",";
		}
		document.write(text + "123px 123px #FFF;")
	</script>;
      }
  
  #stars2 {
    width: 2px;
    height: 2px;
    position: absolute;
    background: transparent;
	box-shadow:<script>
	var random=Math.floor(Math.random() * 2000);
	var i;
	var color = "#FFF";
	var text = "123px 123px #FFF, ";
		for (i = 0; i < 700; i++) {
		var random=Math.floor(Math.random() * 2000);
		var random2=Math.floor(Math.random() * 2000);
		text += random + "px " + random2 + "px " + color + ",";
		}
		document.write(text + "123px 123px #FFF;")
	</script>;
     animation: animStar 100s linear infinite;
  }
  #stars2:after {
    content: " ";
    position: absolute;
    top: 2000px;
    width: 2px;
    height: 2px;
    background: transparent;
    box-shadow:<script>
	var random=Math.floor(Math.random() * 2000);
	var i;
	var color = "#FFF";
	var text = "123px 123px #FFF, ";
		for (i = 0; i < 700; i++) {
		var random=Math.floor(Math.random() * 2000);
		var random2=Math.floor(Math.random() * 2000);
		text += random + "px " + random2 + "px " + color + ",";
		}
		document.write(text + "123px 123px #FFF;")
	</script>;
	}
  
  #stars3 {
    width: 3px;
    height: 3px;
    position: absolute;
    background: transparent;
   box-shadow:<script>
	var random=Math.floor(Math.random() * 2000);
	var i;
	var color = "#FFF";
	var text = "123px 123px #FFF, ";
		for (i = 0; i < 700; i++) {
		var random=Math.floor(Math.random() * 2000);
		var random2=Math.floor(Math.random() * 2000);
		text += random + "px " + random2 + "px " + color + ",";
		}
		document.write(text + "123px 123px #FFF;")
	</script>;
   animation: animStar 150s linear infinite;
  }
  #stars3:after {
    content: " ";
    position: absolute;
    top: 2000px;
    width: 3px;
    height: 3px;
    background: transparent;
    box-shadow:<script>
	var random=Math.floor(Math.random() * 2000);
	var i;
	var color = "#FFF";
	var text = "123px 123px #FFF, ";
		for (i = 0; i < 700; i++) {
		var random=Math.floor(Math.random() * 2000);
		var random2=Math.floor(Math.random() * 2000);
		text += random + "px " + random2 + "px " + color + ",";
		}
		document.write(text + "123px 123px #FFF;")
	</script>;
	}
  
  @keyframes animStar {
    from {
      transform: translateY(0px);
    }
    to {
      transform: translateY(-2000px);
    }
  }