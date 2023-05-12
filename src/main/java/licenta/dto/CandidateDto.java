package licenta.dto;

import lombok.Data;

import javax.persistence.Column;

@Data
public class CandidateDto {

    private Long id;

    private String name;

    private int votes;

    private String lastName;

    private String firstName;

    private String job;

    private String about;

    private int electionId;

}
