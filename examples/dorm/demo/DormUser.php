<?hh
/**
 * This file is partially generated. Only make modifications between BEGIN
 * MANUAL SECTION and END MANUAL SECTION designators.
 *
 * To re-generate this file run codegen.php DormUserSchema
 *
 *
 * @partially-generated SignedSource<<609ad77761b889b1c3dd2a45c5aa296a>>
 */

final class DormUser {

  private function __construct(private Map<string, mixed> $data) {
  }

  public static function load(int $id): ?DormUser {
    $conn = new PDO('sqlite:/path/to/database.db');
    $cursor = $conn->query("select * from user where user_id=$id");
    $result = $cursor->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
      return null;
    }
    return new DormUser(new Map($result));
  }

  public function getFirstName(): string {
    return (string) $this->data['first_name'];
  }

  public function getLastName(): string {
    return (string) $this->data['last_name'];
  }

  public function getBirthday(): ?DateTime {
    return isset($this->data['birthday']) ? new DateTime($this->data['birthday'])
      : null;
  }

  public function getCountryId(): ?int {
    /* BEGIN MANUAL SECTION CountryId */
    // You may manually change this section of code
    return isset($this->data['country_id']) ? (int) $this->data['country_id']
      : null;
    /* END MANUAL SECTION */
  }

  public function getIsActive(): bool {
    return (bool) $this->data['is_active'];
  }
}
