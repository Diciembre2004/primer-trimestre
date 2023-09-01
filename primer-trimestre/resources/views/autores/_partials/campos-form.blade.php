<label>
    Nombre <br>
    <input name="name" type="text" value="{{ old('name', $autor->name) }}"> <br>

    @error('name')
        <small style="color: red">{{ $message }}</small>
        <br>
    @enderror
</label>

{{-- <label>
    DNI <br>
    <input name="dni" type="text" value="{{ old('dni', $autor->pais) }}"> <br>

    @error('name')
        <small style="color: red">{{ $message }}</small>
        <br>
    @enderror
    
</label>
<button type="submit">Grabar</button> <br> --}}

<label>
    Pais <br>
    <input name="country" type="text" value="{{ old('country', $autor->country) }}"> <br>

    @error('country')
        <small style="color: red">{{ $message }}</small>
        <br>
    @enderror
    <button type="submit">Grabar</button>
</label>