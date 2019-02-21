class App extends React.Component{

    constructor(props) {
        super(props);
        this.state = {posts: []}
        this.onPostDelete = this.onPostDelete.bind(this);
    }

    componentDidMount() {
        fetch('/posts')
          .then(response => response.json())
          .then(response => this.setState({posts: response}));
    }

    onPostDelete(postId) {
        fetch('/posts/' + postId, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.status === 200) {
                this.setState({
                    posts: this.state.posts.filter(post => post.postId != postId)
                })
                console.log("Eliminado el post " + postId);
            } else {

            }
        })
        .catch(error => console.log("Error: " + error))
    }

    render() {
        return (
            <div className="app">
                <Search/>
                <PostList posts={this.state.posts} onPostDelete={this.onPostDelete}/>
                <NewPost/>
            </div>
        )
    }
}

class Search extends React.Component{
    render() {
        return (
            <div className="search">
                <form action="">
                    <input type="text" name="nameQuery" placeholder="Buscar por nombre"/>
                    <input type="submit" value="Buscar"/>
                </form>
            </div>
        )
    }
}

class PostList extends React.Component{
    constructor (props) {
        super(props);
    }

    render() {
        return (
            <ul className="posts">
                {this.props.posts
                    .map(post => <Post key={post.postId}  postId={post.postId} name={post.postName} description={post.postDescription} onPostDelete={this.props.onPostDelete}/>)
                }
            </ul>
        )
    }

}

class Post extends React.Component{
    
    constructor(props) {
        super(props);
        this.onPostDelete = this.onPostDelete.bind(this);
    }

    onPostDelete(event) {
        this.props.onPostDelete(this.props.postId)
    }

    render() {
        return (
            <li>
                <span>{this.props.name}</span>
                <span>{this.props.description}</span>
                <button onClick={this.onPostDelete}>Eliminar</button>
            </li>
        )
    }
}

class NewPost extends React.Component{
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            description: ''
        };
        this.newPostSubmit = this.newPostSubmit.bind(this);
        this.changeName = this.changeName.bind(this);
        this.changeDescription = this.changeDescription.bind(this);
    }

    newPostSubmit(event) {
        fetch('/posts/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                'postName': this.state.name,
                'postDescription': this.state.description
            })
        })
        
        console.log(`Nuevo post creado. Nombre: ${this.state.name}. Descripción: ${this.state.description}`)
        event.preventDefault();
    }

    changeName(event) {
        this.setState({name: event.target.value});
    }
    
    changeDescription(event) {
        this.setState({description: event.target.value});
    }

    render() {
        return (
            <div className="new-post">
                <form action="" onSubmit={this.newPostSubmit}>
                    <label htmlFor="new-name">Nombre</label>
                    <input type="text" name="name" placeholder="Nombre" id="new-name" value={this.state.name} onChange={this.changeName}/>
                    <label htmlFor="new-description">Descripción</label>
                    <input type="text" name="description" placeholder="Descripción" id="new-description" value={this.state.description} onChange={this.changeDescription}/>
                    <input type="submit" value="Crear"/>
                </form>
            </div>
        )
    }
}

ReactDOM.render(<App/>, document.querySelector("#app"))