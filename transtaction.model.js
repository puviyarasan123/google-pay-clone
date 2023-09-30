const mongoose = require('mongoose');

const transactionSchema = new mongoose.Schema({
  recipient: { type: String, required: true },
  amount: { type: Number, required: true },
  note: String,
  date: { type: Date, default: Date.now },
  status: { type: String, default: 'pending' },
});

const Transaction = mongoose.model('Transaction', transactionSchema);

module.exports = Transaction;