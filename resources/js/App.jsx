import React from 'react';
import ReactDOM from 'react-dom/client'; // Usando el nuevo método createRoot en React 18

const App = () => {
  return (
    <div>
      <h1>Hello, React!</h1>
    </div>
  );
};

// Asegúrate de que el contenedor existe en tu archivo HTML
const root = document.getElementById('app');  // Asegúrate de que este id coincide con el HTML
const reactRoot = ReactDOM.createRoot(root);
reactRoot.render(<App />);
