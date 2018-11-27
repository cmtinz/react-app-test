class App extends React.Component{
    render() {
        return (
            <div className="app">
                <Search/>
                <PostList/>
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
    constructor(props) {
        super(props);
        this.state = {data: []}
    }
    render() {
        return (
            <ul className="posts">
                {this.state.data.map(data => <Post key={data.post_id} name={data.post_name} description={data.post_description}/>)}
            </ul>
        )
    }
    componentDidMount() {
        fetch('/posts')
          .then(response => response.json())
          .then(response => this.setState({data: response}));
      }
}

class Post extends React.Component{
    render() {
        return (
            <li key={this.props.post_id}>
                <span>{this.props.name}</span>
                <span>{this.props.description}</span>
                <button >Eliminar</button>
            </li>
        )
    }
}

class NewPost extends React.Component{
    render() {
        return (
            <div className="new-post">
                <form action="">
                    <label htmlFor="new-name">Nombre</label>
                    <input type="text" name="name" placeholder="Nombre" id="new-name"/>
                    <label htmlFor="new-description">Descripción</label>
                    <input type="text" name="description" placeholder="Descripción" id="new-description"/>
                    <input type="submit" value="Crear"/>
                </form>
            </div>
        )
    }
}

ReactDOM.render(<App/>, document.querySelector("#app"))