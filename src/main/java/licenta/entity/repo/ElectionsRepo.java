package licenta.entity.repo;

import licenta.entity.Elections;
import licenta.entity.User;
import org.springframework.data.repository.CrudRepository;

public interface ElectionsRepo extends CrudRepository<Elections, Long> {
    Elections findByName(String name);
}
