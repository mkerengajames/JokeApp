var Joke = function(id,text,date){
    this.id = id;
    this.text = text;
    this.date = date;

    this.displayJokeId = function(){
        return(this.id);
    }

    this.displayJokeText = function(){
        return(this.text);
    }


    this.displayJokeDate = function(){
        return(this.date);
    }

}

var H = new Joke("<?php $JokeId ?> ", "<?php $JokeText ?>", "<?php $JokeDate ?>");

alert(H.displayJokeId());
//alert