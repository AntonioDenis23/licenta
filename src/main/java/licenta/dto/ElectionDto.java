package licenta.dto;

import lombok.Data;

import java.util.ArrayList;
import java.util.List;

@Data
public class ElectionDto {

    private String name;

    private List<CandidateDto> candidates = new ArrayList<>();

    private List<UserDto> users = new ArrayList<>();
}
