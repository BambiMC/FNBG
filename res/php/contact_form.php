<div class="w-50" id="messagingForm">
    <div class="m-3 form-group">
        <label>Name</label>
        <input name="userName" type="text" class="form-control" spellcheck="false" id="userName">
    </div>
    <div class="m-3 form-group">
        <label>E-Mail</label>
        <input name="userEmail" type="text" class="form-control" spellcheck="false" id="userEmail">
    </div>
    <div class="m-3 form-group">
        <label>Betreff</label>
        <input name="subject" type="text" class="form-control" spellcheck="false" id="subject">
    </div>
    <div class="m-3 form-group">
        <label class="align-top">Nachricht</label>
        <textarea name="content" class="form-control" spellcheck="false" id="content" cols="60" rows="6"></textarea>
    </div>

    <div class="d-inline-flex align-items-baseline">
        <button class="m-2 btn" name="submit" onClick="sendContact();">Absenden</a>
            <p class="m-1" id="mail-status"></p>
    </div>

</div>