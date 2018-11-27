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
    render() {
        return (
            <ul className="posts">
                <Post name="Post Name 1" description="Post Description"/>
                <Post name="Post Name 2" description="Post Description"/>
                <Post name="Post Name 3" description="Post Description"/>
            </ul>
        )
    }
}

class Post extends React.Component{
    render() {
        return (
            <li>
                <span>{this.props.name}</span>
                <span>{this.props.description}</span>
                <button>Eliminar</button>
            </li>
        )
    }
}

class NewPost extends React.Component{
    render() {
        return (
            <div className="newPost">
                <form action="">
                    <label htmlFor="new-name">Nombre</label>
                    <input type="text" name="name" placeholder="Nombre" id="new-name"/>
                    <label htmlFor="new-description">Descripción</label>
                    <input type="text" name="description" placeholder="Descripción" id="new-description"/>
                    <input type="submit" value="Buscar"/>
                </form>
            </div>
        )
    }
}

ReactDOM.render(<App/>, document.querySelector("#app"))