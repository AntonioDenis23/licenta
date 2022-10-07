package licenta.entity.repo;

import licenta.entity.Candidate;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface CandidateRepo extends CrudRepository<Candidate, Long> {

}
