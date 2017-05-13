@extends('layouts.app')
@section('content')
    <script type="text/javascript">

        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = " tst";
            if(s1.value == "Chevy"){
                var optionArray = ["|","camaro|Camaro","corvette|Corvette","impala|Impala"];
            } else if(s1.value == "Dodge"){
                var optionArray = ["|","avenger|Avenger","challenger|Challenger","charger|Charger"];
            } else if(s1.value == "Ford"){
                var optionArray = ["|","mustang|Mustang","shelby|Shelby"];
            }
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
    </script>


    <h2>Choose Your Car</h2>
    <hr />
    Choose Car Make:
    <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
        <option value="">select some shit</option>
        <option value="Chevy">Chevy</option>
        <option value="Dodge">Dodge</option>
        <option value="Ford">Ford</option>
    </select>
    <hr />
    Choose Car Model:
    <select placeholder="First name" id="slct2" name="slct2">
    </select>
    <hr />
@endsection