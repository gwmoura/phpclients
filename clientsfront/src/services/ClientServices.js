// import axios from 'axios';

function getClients() {
  return [
    { id: 1, name: 'George' },
    { id: 2, name: 'Érica' },
    { id: 3, name: 'Alice' },
  ];
}

function getClient(id) {
  // let url = `/clients/${id}`;
  return {
    id,
  };
}

export { getClients, getClient };
