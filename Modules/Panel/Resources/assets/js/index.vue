<template>
  <div>
    <div class="header">
      <h2>Dashboard card</h2>
      <Button>Add Media</Button>
    </div>
    <div class="body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Duration</th>
            <th scope="col">Size</th>
            <th scope="col">Owner</th>
            <th scope="col">Permission</th>
            <th scope="col">File Name</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Media 1</td>
            <td>Image</td>
            <td>
              <img src="" alt="image" />
            </td>
            <td>00:00</td>
            <td>125Kb</td>
            <td>admin</td>
            <td>Everyone</td>
            <td>media_image.jpg</td>
            <td>
              <select name="" id="">
                <option value="">Edit</option>
                <option value="">Delete</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Media 2</td>
            <td>Image</td>
            <td>
              <img src="" alt="image" />
            </td>
            <td>00:00</td>
            <td>125Kb</td>
            <td>admin</td>
            <td>Everyone</td>
            <td>media_image.jpg</td>
            <td>
              <select name="" id="">
                <option value="">Edit</option>
                <option value="">Delete</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Media 3</td>
            <td>Image</td>
            <td>
              <img src="" alt="image" />
            </td>
            <td>00:00</td>
            <td>125Kb</td>
            <td>admin</td>
            <td>Everyone</td>
            <td>media_image.jpg</td>
            <td>
              <select name="" id="">
                <option value="">Edit</option>
                <option value="">Delete</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  mounted() {
    axios
      .get("http://localhost:8000/panel/data", [], {
        headers: {
          Authorization:
            "Bearer " +
            "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlZDdiNzYzMTQwYTFmM2FmYmU5OWRmZmE5NzA3NDMyMDYzZTQ3MjRlYjgxNWUzMGNkOGZjOWJkZmNlYWVjMGM4NDU2ZTgxNzZkMDQyYjg5In0",
        },
      })
      .then((res) => console.log(res));
  },
};
</script>

<style scoped>
.header {
  display: flex !important;
  justify-content: space-between;
}
</style>
