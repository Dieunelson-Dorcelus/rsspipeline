
export default class AppStore{
    constructor(){
        this.state = {
            client : {
                guest : true
            },
            activePage : "Home"
        }
    }

    connect(client){
        this.state.client.guest = false;
        return client;
    }

    disconnect(){
        this.state.client = {
            guest : true
        }
    }
}
