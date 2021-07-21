<!-- contact form starts -->
<form action="/contact/administration/store" id="contact-form" class="form-horizontal" method="POST">
    @csrf
    <fieldset>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="name">name</label>
            <div class="col-sm-8">
                <input type="text" placeholder="Your Name" class="form-control" name="name"
                    id="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="email">email</label>
            <div class="col-sm-8">
                <input type="text" placeholder="Enter Your Email Address" class="form-control"
                    name="email" id="email">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="subject">subject</label>
            <div class="col-sm-8">
                <input type="text" placeholder="Subject" class="form-control" name="subject"
                    id="subject">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="message">message</label>
            <div class="col-sm-8">
                <textarea placeholder="Please Type Your Message" class="form-control" name="message"
                    id="message" rows="3"></textarea>
            </div>
        </div>
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Cancel</button>
        </div>
    </fieldset>
</form>

<!-- contact form ends -->