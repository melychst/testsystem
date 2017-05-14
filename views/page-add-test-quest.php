<?php

 if ( $_SESSION['count']  == '' ) {
  $_SESSION['count'] = 1;
 }
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Запитання № <?php echo $_SESSION['count']; ?></h1>
			
			<form action="" class="form-vertical" method="POST">
			  	<div class="control-group">
			    	<label class="control-label" for="quest">Введіть запитання</label>
			    	<div class="controls">
			      		<textarea id="quest" name="quest"></textarea>
			    	</div>			  			
			  	</div>
			  	<div class="control-group">
			  		<div class="main-block">
				    	<label class="control-label" for="ans1">Варіант відповіді 1</label>
				    	<div class="controls">
				      		<input type="text" id="ans1" name="ans1">
				    	</div>
			    	</div>
			  		<div class="ans-block">
			  			<div class="right-ans">
				  			<label class="control-label" for="right_ans">Правильна відповідь</label>
				  			<input type="radio" id="right_ans" name="right_ans">			  				
			  			</div>
			  			<div class="count-point">
				  			<label class="control-label" for="bal_ans1">К-сть балів</label>
				  			<input type="text" id="bal_ans1" name="bal_ans1">			  				
			  			</div>
	
			  		</div>
			  		<div class="clear"></div>			    	
			  	</div>

			  	<div class="control-group">
			  		<div class="main-block">
				    	<label class="control-label" for="ans2">Варіант відповіді 2</label>
				    	<div class="controls">
				      		<input type="text" id="ans2" name="ans2">
				    	</div>
			    	</div>
			  		<div class="ans-block">
			  			<div class="right-ans">
				  			<label class="control-label" for="right_ans">Правильна відповідь</label>
				  			<input type="radio" id="right_ans" name="right_ans">			  				
			  			</div>
			  			<div class="count-point">
				  			<label class="control-label" for="bal_ans2">К-сть балів</label>
				  			<input type="text" id="bal_ans2" name="bal_ans2">			  				
			  			</div>
	
			  		</div>
			  		<div class="clear"></div>			    	
			  	</div>

			  	<div class="control-group">
			  		<div class="main-block">
				    	<label class="control-label" for="ans3">Варіант відповіді 3</label>
				    	<div class="controls">
				      		<input type="text" id="ans3" name="ans3">
				    	</div>
			    	</div>
			  		<div class="ans-block">
			  			<div class="right-ans">
				  			<label class="control-label" for="right_ans">Правильна відповідь</label>
				  			<input type="radio" id="right_ans" name="right_ans">			  				
			  			</div>
			  			<div class="count-point">
				  			<label class="control-label" for="bal_ans3">К-сть балів</label>
				  			<input type="text" id="bal_ans3" name="bal_ans3">			  				
			  			</div>
	
			  		</div>
			  		<div class="clear"></div>			    	
			  	</div>			  	

			  	<div class="control-group">
			  		<div class="main-block">
				    	<label class="control-label" for="ans4">Варіант відповіді 4</label>
				    	<div class="controls">
				      		<input type="text" id="ans3" name="ans4">
				    	</div>
			    	</div>
			  		<div class="ans-block">
			  			<div class="right-ans">
				  			<label class="control-label" for="right_ans">Правильна відповідь</label>
				  			<input type="radio" id="right_ans" name="right_ans">			  				
			  			</div>
			  			<div class="count-point">
				  			<label class="control-label" for="bal_ans4">К-сть балів</label>
				  			<input type="text" id="bal_ans4" name="bal_ans4">			  				
			  			</div>
	
			  		</div>
			  		<div class="clear"></div>			    	
			  	</div>



				<div class="form-actions">
				  <button type="submit" class="btn btn-primary" name="save_test" value="saveTest">Завершити введення тесту</button>
				  <button type="submit" class="btn" name="add_quest" value="AddQuest">Добавити запитання</button>
				</div>
			</form>
		</div>
	</div>
</div>