  <h1 class="contact_title">Formulaire de contact</h1>

  <div class="form_container">
      <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Choisir</label>
        <select class="form-select" id="inputGroupSelect01">
          <option selected>Sujet de votre message...</option>
          <option value="1">Bug</option>
          <option value="2">Proposition d'amélioration</option>
          <option value="3">Autre</option>
        </select>
      </div>

      <div class="input-group">
        <span class="input-group-text">Prénom et nom de famille</span>
        <input type="text" aria-label="First name" class="form-control">
        <input type="text" aria-label="Last name" class="form-control">
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
      </div>

      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
      </div>

      <div class="input-group">
        <span class="input-group-text">Votre message</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>

      <button type="button" class="p-2 bd-highlight btn btn-primary">Envoyer</button>
  </div>