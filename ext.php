<?php

	class Post{
		public $title;
		public $author;
		public $slug;
		public $content;
		public $tags;
		
		public function __contsruct($string){
			$this->getContent($string);
			$this->getTags($string);
			$this->getTitle($string);
		}
		
		
		//Idea is to individualize the words inside the file, then count them based on repeatitions, then finally get the top 5 repeated words, but I had a bit of problem with just taking the word out as the process that I went for switched the key and values in the array.
		public function getTags($string){
			$sents = str_word_count($string, 1);
			
			$reps = array_count_values($sents);
			
			arsort($reps);

			$this->tags = array_slice($reps, 0,5,true);
			return $this->tags;
		}
		
		//Idea is to split the content of the file into 2 or multiple strings either using # or === as the delimiter, then just taking the last string as the content.
		public function getContent($string){
			
			if(str_contains($string, "#")){
				$delimiter = '#';
				$strings = explode($delimiter, $string);
				$this->content = $strings[1];
			}
			else{
				$delimiter = "===";
				$strings = explode($delimiter, $string);
				$this->content = $strings[2];
			}
			return $this->content;
		}
		
		//Idea is to do the same thing as in the content method but in this case checking if the word Title is in the string, if so them split it further into multiple strings using : after finally taking the 2nd value in the array which should contain the title.
		public function getTitle($string){
			$delimiter = '#';
			$strings = explode($delimiter, $string);
			$deli2 = "\n";
			
			$deli2 = "\n";
			$temp = "";
			$target = explode($deli2, $string);
			foreach ($target as $value){
				if (str_contains($value, "Title")){
					$temp = $value;
				}
			}
			$deli3 = ":";
			$target = explode($deli3, $temp);
			$this->title = $target[1];	
			return $this->title;
		}
	}

?>