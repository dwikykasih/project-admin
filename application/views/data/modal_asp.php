
            <label for="recipient-name" class="col-form-label">Pilih ASP:</label>
          <?php            
          $link = mysqli_connect("localhost", "root", "", "angsur");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
           
          // Attempt select query execution
          $sql = "SELECT * FROM pengajuan_asp WHERE status = 1";
          if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<select name='asp' class='form-control'>";
                  
                  while($row = mysqli_fetch_array($result)){
                    echo "<option>" . $row['nama'] . "</option>";
                  }
                  echo "<option value='0'>-Kosongkan Pilihan ASP-</option>";
                  echo "</select>";
                  // Free result set
                  mysqli_free_result($result);
              } else{
                  echo "No records matching your query were found.";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }

          if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<textarea name='id_asp' hidden>";
                  while($row = mysqli_fetch_array($result)){
                    echo $row['id_asp'];
                  }
                  echo "</textarea>";
                  // Free result set
                  mysqli_free_result($result);
              } else{
                  echo "No records matching your query were found.";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
           
          ?>

          </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <input type="submit" value="Simpan" class="btn btn-primary"></div>
        </form>
      
      </div>
    </div>
  </div>
</div>