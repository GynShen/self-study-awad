import React from 'react';
import ReactDOM from 'react-dom';
import {Table, Button} from 'reactstrap';

function Example() {
    return (
    
        <div className="container">
        <Table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>React Post 1</td>
                    <td>This is the first reactstrap Post </td>
                    <td>
                    <Button color="success" size="sm">Edit</Button>
                    <Button color="danger" size="sm">Delete</Button>
                    </td>
                </tr>
            </tbody>
        </Table>
    </div>
      
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}