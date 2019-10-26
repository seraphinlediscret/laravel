let confirm = document.getElementById("conf");


var pomodoro = {
    started : false,
    minutes : 0,
    seconds : 0,
    count : 0,
    fillerHeight : 0,
    fillerIncrement : 0,
    interval : null,
    countDom : null,
    minutesDom : null,
    secondsDom : null,
    fillerDom : null,

    init : function(){
      var self = this;
      this.minutesDom = document.querySelector('#minutes');
      this.countDom = document.querySelector('#count');
      this.secondsDom = document.querySelector('#seconds');
      this.interval = setInterval(function(){
          self.intervalCallback.apply(self);
      }, 1000);

      function startCon(){
          self.startWork.apply(self);
      };
      confirm.addEventListener("click", startCon);
      

      document.querySelector('#count').onclick = function(){
          self.startCount.apply(self);
      };

    },
    resetVariables : function(mins, secs, started, compteur){
    this.minutes = mins;
    this.seconds = secs;
    this.started = started;
    this.count = compteur;
    },
    startWork: function() {
    this.resetVariables(this.minutesDom.innerHTML, this.seconds = 0, true, this.countDom.innerHTML - 1);
    
    },
    
    stopTimer : function(){
        
        this.countDom.textContent --
        if( this.countDom.textContent < 0){
            this.countDom.textContent = 0;
        }
    },
    toDoubleDigit : function(num){
    if(num < 10) {
        return "0" + parseInt(num, 10);
    }
    return num;
    },
    updateDom : function(){
    this.minutesDom.innerHTML = this.toDoubleDigit(this.minutes);
    this.secondsDom.innerHTML = this.toDoubleDigit(this.seconds);
    
    },
    intervalCallback : function(){
    if(!this.started) return false;
    if(this.seconds == 0) {
        if(this.minutes == 0) {
        this.timerComplete();
        return;
        }
        this.seconds = 59;
        this.minutes--;
    } else {
        this.seconds--;
    }
    this.updateDom();
    },
    timerComplete : function(){
    this.started = false;
    this.fillerHeight = 0;
    }
};
window.onload = function(){
    pomodoro.init();
    };