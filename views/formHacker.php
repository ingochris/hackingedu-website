<?php // HACKER FORM ?>
<form>
    <!-- Name -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Name:</label> -->
        <!-- <div class=""> -->
        <input id="textinput" name="textinput" placeholder="Hacker Name:  Alex Cory" class="form-control input-md" type="text">
          <!-- <span class="help-block">help</span> -->
        <!-- </div> -->
    </div>

    <!-- Email -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Email</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="Email:  you@yourSchool.edu" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>

    <!-- Major -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Major</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="Major:  Computer Science" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>

    <!-- School -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your School</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="School:  Example University" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>

    <!-- Gender -->
    <div class="form-group">
        <label class=" control-label" for="gender">Gender?</label>
        <div class="">
            <label class="radio-inline" for="gender-0">
                <input name="gender" id="gender-0" value="1" checked="checked" type="radio">
                Male
            </label>
            <label class="radio-inline" for="gender-1">
                <input name="gender" id="gender-1" value="2" type="radio">
                Female
            </label>
            <label class="radio-inline" for="gender-2">
                <input name="gender" id="gender-2" value="3" type="radio">
                Other
            </label>
        </div>
    </div>

    <!-- Grade -->
    <div class="form-group">
        <label class=" control-label" for="grade">What grade will you be in this Spring?</label>
        <div class="">
            <label class="radio-inline" for="grade-0">
                <input name="grade" id="grade-0" value="1" checked="checked" type="radio">
                Freshman
            </label>
            <label class="radio-inline" for="grade-1">
                <input name="grade" id="grade-1" value="2" type="radio">
                Sophomore
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                Junior
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                Senior
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                Highschool
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                Graduate Student
            </label>
        </div>
    </div>

    <!-- First Hackathon? -->
    <div class="form-group">
        <label class=" control-label" for="fHackathon">Is this your first hackathon?</label>
        <div class="">
            <label class="radio-inline" for="fHackathon-0">
                <input name="fHackathon" id="fHackathon-0" value="1" checked="checked" type="radio">
                Yes
            </label>
            <label class="radio-inline" for="fHackathon-1">
                <input name="fHackathon" id="fHackathon-1" value="2" type="radio">
                No
            </label>
        </div>
    </div>

    <!-- Github -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Github</label> -->
        <!-- <div class=""> -->
            <input id="textinput" name="textinput" placeholder="Github:  @github_username" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        <!-- </div> -->
    </div>

    <!-- LinkedIn -->
    <div class="form-group">
      <!-- <label class=" control-label" for="textinput">Your LinkedIn</label> -->
      <!-- <div class=""> -->
        <input id="textinput" name="textinput" placeholder="LinkedIn:  https://linkedin.com/in/your_linkedin_url" class="form-control input-md" type="text">
        <!-- <span class="help-block">help</span> -->
      <!-- </div> -->
    </div>

    <!-- Travel Arrangements? -->
    <div class="form-group">
        <label class=" control-label" for="radios">Will you need a travel reimbersment/arrangement to attend Hacking Edu?</label>
        <div class="">
            <label class="radio-inline" for="radios-0">
                <input name="radios" id="radios-0" value="1" type="radio">
                Yes
            </label>
            <label class="radio-inline" for="radios-1">
                <input name="radios" id="radios-1" value="2" checked="checked" type="radio">
                No
            </label>
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
        <label class=" control-label" for="textarea">At Hacking Edu we want to show the world the new ways we can learn.  How do you plan to tackle this challenge?</label>
        <div class="">
          <textarea class="form-control" id="textarea" name="textarea">Tell us about your idea! :)</textarea>
        </div>
    </div>

    <button id="singlebutton" name="singlebutton" class="btn btn-default pull-right">Submit</button>

</form>