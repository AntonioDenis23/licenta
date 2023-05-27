package licenta.dto;

import com.fasterxml.jackson.annotation.JsonIgnore;
import lombok.Data;

import javax.persistence.Column;
import java.util.List;

@Data
public class CandidateDto {

    private Long id;

    private String name;

    private int votes;

    private String lastName;

    private String firstName;

    private String job;

    private String about;

    private List<ElectionDto> electionDto;

    private long electionId;

}
