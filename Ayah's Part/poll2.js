$(document).ready(function(){
    var buttons = document.querySelectorAll(".choice button"),
      tally = {
        5: 0,
        6: 0,
        7: 0,
        8: 0,
        total: 0
      };
    
    function vote(choice) {
      tally[choice]++;
      tally["total"]++;
      console.log(tally);
    }
    
    function barPercentage(node, tally) {
      var choice = node.dataset.choice;
      
      if (tally[choice])
        return tally[choice]/tally["total"] * 100;
      return 0;
    }
    
    function renderBars() {
      var bars = document.getElementsByClassName("bars");
      
      for (var i = 0; i < bars.length; i++) {
        var percentage = barPercentage(bars[i], tally);
        console.log(percentage)
        bars[i].style.height = percentage.toString() + "%";
      }
    }
    
    function setup() {
      // Set up event listeners
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(e) {
          vote(e.target.dataset["choice"]);
          renderBars();
        });
      }
      
      renderBars();
    }
    setup();
    });
    
    