<div class="w-50" id="formContact">
    <div class="form-group m-3">
        <label class="text-orange">Name</label>
        <input name="userName" type="text" class="form-control" spellcheck="false" id="userName">
    </div>
    <div class="form-group m-3">
        <label class="text-orange">E-Mail</label>
        <input name="userEmail" type="text" class="form-control" spellcheck="false" id="userEmail">
    </div>
    <div class="form-group m-3">
        <label class="text-orange">Betreff</label>
        <input name="subject" type="text" class="form-control" spellcheck="false" id="subject">
    </div>
    <div class="form-group m-3">
        <label class="text-orange">Nachricht</label>
        <textarea name="content" class="form-control" spellcheck="false" id="content" cols="60" rows="6"></textarea>
    </div>

    <div class="d-inline-flex align-items-baseline">
        <button class="btn btn-orange m-2" name="submit" onClick="sendContact();">Absenden</a>
            <p class="m-1 text-orange" id="mail-status"></p>
    </div>

</div>