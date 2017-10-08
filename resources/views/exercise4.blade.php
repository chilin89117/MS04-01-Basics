@extends('layouts.app')

@section('panel-heading')
<div class="panel-heading">Exercise 4</div>
@endsection

@section('content')
<div id="ex">
  <!-- Click button to alternate between 2 classes -->
  <div>
    <button @click="startEffect">Start Effect</button>
    <div id="effect" :class="effectClass"></div>
  </div>

  <!-- Attach 2 classes to text -->
  <div :class="['bigger', 'strike']">I got no class :(</div>

  <!-- Apply class from user input -->
  <div>
    <p>Input a class (hint: circle): <input type="text" v-model="userClass"></p>
    <div :class="userClass"></div>
  </div>

  <div>
    <p>Color red?: <input type="checkbox" v-model="wantRed"></p>
    <div :class="[userClass, {'red':wantRed}]"></div>
  </div>

  <!-- Binding styles -->
  <div>
    <p>Enter a color: <input type="text" v-model="myStyle.backgroundColor"></p>
    <div :style="myStyle"></div>
  </div>

  <div>
    <button @click="startProgress">Start Progress</button>
    <div :class="['progBar']" :style="{width: 500*pct/100 + 'px'}">@{{pct}}%</div>
  </div>
</div>

<style media="screen">
#effect {
  width: 100px;
  height: 100px;
  border: 1px solid black;
}

.highlight {
  background-color: red;
  width: 200px !important;
}

.shrink {
  background-color: gray;
  width: 50px !important;
}

.bigger {
  font-size: 3em;
}

.strike {
  text-decoration: line-through;
  text-decoration-color: red;
}

.circle {
  border: black solid 3px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
}

.red {
  background-color: red;
}

.progBar {
  height: 50px;
  background-color: red;
  color: black;
  font-weight: bold;
  font-size: 2em;
}
</style>
@endsection

@section('custom_scripts')
<script>
var vm = new Vue ({
  el : '#ex',
  data: {
    effectClass: {
      highlight: true,
      shrink: false,
    },
    userClass: '',
    wantRed: 'false',
    myStyle: {width:'300px',height:'100px',backgroundColor:'#ccc'},
    pct: 0,
  },
  methods: {
    startEffect() {
      setInterval(function() {
        vm.effectClass.highlight = !vm.effectClass.highlight;
        vm.effectClass.shrink = !vm.effectClass.shrink;
      }, 1000);
    },
    startProgress() {
      var prog = setInterval(function() {
        vm.pct += 5;
        if(vm.pct >= 100) {
          vm.pct = 100;
          clearInterval(prog);
        }
      },1000);
    },
  },
});
</script>
@endsection
