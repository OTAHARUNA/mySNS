import React from 'react';
import ReactDOM from 'react-dom';
import App from '../../../../../helloworld/src/App';
import DatePicker from 'react-datepicker';
import "react-datepicker/dist/react-datepicker.css";

const App = () => {
  const initialDate = new Date()
  const [startDate, setStartDate] = useState(initialDate)
  const handleChange = (date) => {
    setStartDate(date)
  }

  return (
    <DatePicker
      selected={startDate}
      onChange={handleChange}
    />
  )
}


export default App;

if (document.getElementById('callender')) {
    ReactDOM.render(<App />, document.getElementById('callender'));
}
