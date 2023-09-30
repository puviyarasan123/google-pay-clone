const { MongoClient } = require("mongodb");

// Replace 'mongodb://localhost/google-pay-clone' with your MongoDB connection string
const mongoURI = 'mongodb://localhost/googlepayclone';

MongoClient.connect(mongoURI, { useNewUrlParser: true, useUnifiedTopology: true });

const db = MongoClient.connection;
 //init();
function init() {
  if (MongoClient.isConnected()) {
    console.log("Connected!!!");
  }
  else {
    console.log('error');
  }
}
