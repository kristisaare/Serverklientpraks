window.onload = function() {
  var beads = document.getElementsByClassName('bead')
  for (var i = 0; i<beads.length; i++){
    var bead = beads[i]
    bead.onclick=function(){
      var style = window.getComputedStyle(this);
      var cssFloat = style.getPropertyValue('float');
      console.log(cssFloat)

      if (cssFloat=="left") {
        this.style.cssFloat = "right";

      } else {
        this.style.cssFloat = "left";

      }
    }
  }
}
