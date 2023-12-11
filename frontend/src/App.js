import { useEffect } from "react";
function App() {
  useEffect(() => {
    async function getData(){
      const response = await fetch("http://localhost:8000");
      const data = await response.json();
      console.log(data);
    }
    getData();
  });

  return (
    <div>
      <h1>hello</h1>
    </div>
  );
}

export default App;
