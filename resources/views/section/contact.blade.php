	<!--Contact -->
    <section id="contactUs" class="page-section secPad">
        <div class="container">

            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h2>Let's Keep In Touch!</h2>
                    <p>Use this form to tell me about your project needs or contact me about anything I can help you with. <br/>I will be in touch within 24 hours.</p>
                </div>
            </div>

            <div class="row mrgn30">

                <form method="post" action="contactengine" id="contactfrm">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name or Nickname</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="3" rows="5" placeholder="Tell me anything…" title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                        <div class="result"></div>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </form>
                <div class="col-sm-4">
                    <h4>Address:</h4>
                    <address>
                        Vijenac Meštrovića<br>
                        31000, Osijek, Croatia<br>

                        <br>
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        +385 91 924 9906<br>
                    </address>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>