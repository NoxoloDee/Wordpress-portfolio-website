<?php?>


<?php get_header(); ?>

<div class="container">

	<div class="jumbotron"></div>

	<div class="row">
		<div class="col-md-12">
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>

	<div class="row">
        <div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Ayanda Mabulu </h3>
					<hr>
					<address>
						<strong>Cape Town</strong> E Mandela Birding, Dr. Suit 90 AZ 88944 South Africa ,<br>
						<strong>Phone:</strong> +277-670-4148 
					</address>

					<address>
						<strong>King Williams Town:</strong>  Zwelitsha, 80937 Eastern Cape , <br>
						<strong>Phone:</strong> +277-670-4148
					</address>
				</div>
				    
				<div class="col-sm-8 contact-form">
					<form id="contact" method="post" class="form" role="form">
						<div class="row">
							<div class="col-xs-6 col-md-6 form-group">
								<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
							</div>
							<div class="col-xs-6 col-md-6 form-group">
								<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
							</div>
						</div>
						<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
						<br />
						<div class="row">
							<div class="col-xs-12 col-md-12 form-group">
								<button class="btn btn-primary pull-right" type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
    	</div>
    </div>



 <section><?php get_footer(); ?>
 </section>