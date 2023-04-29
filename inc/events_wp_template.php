
<div class="container">
<h1 style="font-family: Tinos,times new;"><?php echo $args['heading'] ?></h1>
<div class="event-item-block">
    <div class="subtitle-holder">
        <span class="subtitle"><?php echo $args['sub_title'] ?></span>
<!-- 		<span class="share-this">' . $social_media_body .'</span> -->
    </div>
    <div style="display:flex; justify-content: space-between;" >
        <div class="image-holder">
			<div  class="image-slide-show"> <img src="https://res.cloudinary.com/dwbs6mbsy/image/upload/<?php echo $args['image-slide-show'] ?>" ></div>
        </div>
        <div style="padding: 0 0 0 4.8rem;" class="text-holder">
            <div class="grid-x grind-margin-x">
                    <p>
						<span class="event-date"><?php echo $args['event_date'] ?></span>
						"8:30am – 12:00pm (EST)"
                        <span class="event-location"><?php echo $args['event_location'] ?></span>
                    </p>
                </div>
                <div class="cell-right">
                    <p>
                        <strong><?php echo $args['cont_edu'] ?></strong>
                        <br>
                        <small><?php echo $args['cont_edu_extra'] ?></small>
                    </p>
                </div>
			 <p><?php echo $args['event_description'] ?></p>
             <ul class="event-links"></ul>
             <ul class="event-buttons"></ul>
            </div>
        </div>
 
    </div>
</div>
<div class="item-block event-details">
    <strong class="title">Event Details</strong>
    <div class="event-tabs-holder"></div>
    <div class="event-tab-conent"></div>
</div>
</div>
