
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <chat-component></chat-component>
            <user-component></user-component>
        </div>
    </div>
@endsection
<script>
    import ChatComponent from "../js/components/ChatComponent.vue";
    import UserComponent from "../js/components/UserComponent.vue";
    export default {
        components: {ChatComponent,UserComponent},
    }
    //todo
</script>
