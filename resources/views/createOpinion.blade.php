<form action="{{ route('createOpinion') }}" method="post">
    @csrf
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" placeholder="Nom">
    </div>

    <div>
        <label for="message">Message</label>
        <input type="text" name="message" id="message" placeholder="Votre Message">
    </div>

    <button type="submit">Enregistrer</button>
</form>
