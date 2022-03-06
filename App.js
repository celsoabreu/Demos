import {useEffect,useState} from 'react';
import axios from 'axios';
import './App.css';

function App() {


  const [posts,setPosts] = useState([]);

  useEffect(()=>{
      axios.get('http://localhost/demo/index.php')
      .then(function(res){
        setPosts(res.data);
        console.log(res);
      }) 
  },[])

  

  return (

    
    <div className="App">
        {
          <><h1> Dev React com PHP - API - Jornal 2022 </h1></>
        }
        {
          posts.map(function(val) {
            return(

            <div class="card" >
              <img src={val.imagem} class="img-fluid" alt="..."></img> 
              <h5 class="card-title" >Artigo</h5>
              <div class="card-body">
              <p class="card-text">{val.conteudo}</p>
              </div>
            </div>

              
            )
          })
          
        }  
    </div>
  );
}

export default App;
